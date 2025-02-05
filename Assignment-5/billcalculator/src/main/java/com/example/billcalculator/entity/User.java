package com.example.billcalculator.entity;

public class User{

    String name;
    int units;
    String date;
    double bill;

    public double getBill() {
        return bill;
    }
    public String getDate() {
        return date;
    }
    public String getName() {
        return name;
    }
    public int getUnits() {
        return units;
    }
    public void setBill(double bill) {
        this.bill = bill;
    }
    public void setDate(String date) {
        this.date = date;
    }
    public void setName(String name) {
        this.name = name;
    }
    public void setUnits(int units) {
        this.units = units;
    }
}