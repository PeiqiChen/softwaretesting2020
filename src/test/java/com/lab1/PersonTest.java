package com.lab1;

import java.util.ArrayList;
import org.junit.Test;
import org.junit.Before;
import static org.junit.Assert.*;

public class PersonTest {
    int[] needs ={-1,0,2,14,15,39,40,42,44,49,50,53,83,85,89,90,92,99};
    ArrayList<Person> persons = new ArrayList<Person>();
    @Before
    public void init(){
        for (int i:needs) {
            persons.add(new Person(i));
        }
    }
    @Test
    public void testTake(){
        for (Person p:persons
             ) {
            assertTrue(p.take());
        }
    }

}
