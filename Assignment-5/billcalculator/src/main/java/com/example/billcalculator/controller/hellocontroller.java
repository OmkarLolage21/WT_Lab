package com.example.billcalculator.controller;

import org.springframework.web.bind.annotation.RestController;

import com.example.billcalculator.entity.User;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

@RestController
public class hellocontroller {

    @GetMapping("/hello")
    public String Hello() {
        return "Hello from Omkar";
    }

    @PostMapping("/calculate")
    public User postMethodName(@RequestBody User user) {

        int units = user.getUnits();
        double bill;

        if (units <= 50) {
            bill = units * 3.50;
        } else if (units <= 150) {
            bill = (50 * 3.50) + ((units - 50) * 4.00);
        } else if (units <= 250) {
            bill = (50 * 3.50) + (100 * 4.00) + ((units - 150) * 5.20);
        } else {
            bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + ((units - 250) * 6.50);
        }
        user.setBill(bill);
        return user;
    }
}
