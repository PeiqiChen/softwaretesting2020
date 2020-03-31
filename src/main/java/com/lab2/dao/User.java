package com.lab2.dao;

public class User {
    public String id;
    public String pass;
    public User(String id){
        this.id=id;
    }
    @Override
    public String toString() {
        return "User{" + "id=" + id + ", pass=" + pass + '}';
    }
}
