#include <iostream>
#include <string>
#include <vector>
using namespace std;

// Enum for Room Types
enum RoomType {
    APARTMENT_AC,
    STANDARD_AC,
    STANDARD_NON_AC
};

// Enum for Meal Options
enum MealOption {
    ALACARTE,
    MESS_4_MEALS,
    MESS_3_MEALS,
    MESS_2_MEALS_BD,
    MESS_2_MEALS_LD
};

// Struct to store booking details
struct Booking {
    string studentName;
    RoomType room;
    MealOption meal;
    int totalCost;
};

// Room costs
const int roomCosts[] = { 60000, 50000, 40000 };
// Meal costs
const int mealCosts[] = { 55000, 46000, 42000, 38000, 38000 };

// Function to show room types
void displayRoomOptions() {
    cout << "\nSelect Room Type:\n";
    cout << "0. Apartment Room (AC) - ₹60000\n";
    cout << "1. Standard Room (AC) - ₹50000\n";
    cout << "2. Standard Room (Non-AC) - ₹40000\n";
}

// Function to show meal options
void displayMealOptions() {
    cout << "\nSelect Meal Option:\n";
    cout << "0. Alacarte - ₹55000\n";
    cout << "1. Standard Mess Four Meals (Breakfast, Lunch, Tea Snacks, Dinner) - ₹46000\n";
    cout << "2. Standard Mess Three Meals (Breakfast, Lunch, Dinner) - ₹42000\n";
    cout << "3. Standard Mess Two Meals (Breakfast & Dinner) - ₹38000\n";
    cout << "4. Standard Mess Two Meals (Lunch & Dinner) - ₹38000\n";
}

// Function to convert enum to string
string getRoomString(RoomType type) {
    switch(type) {
        case APARTMENT_AC: return "Apartment Room (AC)";
        case STANDARD_AC: return "Standard Room (AC)";
        case STANDARD_NON_AC: return "Standard Room (Non-AC)";
    }
    return "";
}

string getMealString(MealOption meal) {
    switch(meal) {
        case ALACARTE: return "Alacarte";
        case MESS_4_MEALS: return "Standard Mess Four Meals";
        case MESS_3_MEALS: return "Standard Mess Three Meals";
        case MESS_2_MEALS_BD: return "Standard Mess Two Meals (B&D)";
        case MESS_2_MEALS_LD: return "Standard Mess Two Meals (L&D)";
    }
    return "";
}

int main() {
    vector<Booking> bookings;
    Booking current;
    
    cout << "=== Hostel Room Allotment System (2025-2026) ===\n";

    cout << "\nEnter your name: ";
    getline(cin, current.studentName);

    displayRoomOptions();
    int roomChoice;
    cout << "Enter choice (0-2): ";
    cin >> roomChoice;
    current.room = static_cast<RoomType>(roomChoice);

    displayMealOptions();
    int mealChoice;
    cout << "Enter choice (0-4): ";
    cin >> mealChoice;
    current.meal = static_cast<MealOption>(mealChoice);

    current.totalCost = roomCosts[roomChoice] + mealCosts[mealChoice];
    bookings.push_back(current);

    // Display summary
    cout << "\nBooking Summary:\n";
    cout << "Name: " << current.studentName << endl;
    cout << "Room Type: " << getRoomString(current.room) << endl;
    cout << "Meal Option: " << getMealString(current.meal) << endl;
    cout << "Total Cost: ₹" << current.totalCost << endl;

    return 0;
}