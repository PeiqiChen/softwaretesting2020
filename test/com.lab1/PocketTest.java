package com.lab1;

        import static org.junit.Assert.*;
        import org.junit.Test;


public class PocketTest{
    Pocket pocket=new Pocket();
    @Test
    public void testTake(){
        assertEquals(0, pocket.take(0));
        assertEquals(-1, pocket.take(-1));
        assertEquals(0, pocket.take(20));
        assertEquals(-1, pocket.take(9999));
        assertEquals(-1, pocket.take(34));
    }
}
