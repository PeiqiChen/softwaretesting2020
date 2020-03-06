package com.hw2;

public class Main {
    public int findLast (int[] x, int y) {
        //Effects: If x==null throw NullPointerException
        // else return the index of the last element
        // in x that equals y.
        // If no such element exists, return -1
        for (int i=x.length-1; i > 0; i--)
        {
            System.out.println(i);

            if (x[i] == y) {
                return i;
            }
        }
        return -1;
    }
    // test: x=[2, 3, 5]; y = 2 // Expected = 0

    public int lastZero (int[] x) {
        // Effects: if x==null throw NullPointerException
        // else return the index of the LAST 0 in x.
        // Return -1 if 0 does not occur in x
        for (int i = 0; i < x.length; i++)
        {
            System.out.println( x.length);

            if (x[i] == 0) {
                return i;
            }
        } return -1;
    }
    // test: x=[0, 1, 0] // Expected = 2


    public static void main(String[] args) {
	Main obj=new Main();
    int[] x={2,3,5};
    int y = 1;
	int findlast= obj.findLast(x,y);
    x=new int[]{1, 1, 0};
    int lastzero=obj.lastZero(x);

    System.out.format("findLast: %d ;lastZero: %d\n",findlast,lastzero);


    }
}

