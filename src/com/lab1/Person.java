package com.lab1;

public class Person {
    Pocket p=new Pocket();
    public int need;
    public Person(int need){
        this.need=need;
    }
    public boolean take(){
        return p.take(need);
    }
}
