//package com.lab4.mujavahome2;
//import com.lab4.mujavahome2.APLUSB;

import org.junit.Test;
import static org.junit.Assert.assertEquals;


public class APLUSBTest {
    @Test
    public void test_plus(){
        assertEquals(5,APLUSB.aPlusB(2,3));
    }
}
