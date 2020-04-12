package com.lab4.mujavahome;
import com.lab4.mujavahome.src.BubbleSort;

import org.junit.Test;
import static org.junit.Assert.assertArrayEquals;
import static org.junit.Assert.assertNotSame;


public class BubbleSortTest {
    @Test
    public void test_BubbleSort() {
        int[] arr1={1, 2, 3, 4, 5, 6};
        int[] arr2={};
        int[] arr3={6, 5, 4, 3, 2, 1};
        int[] arr4={1, 1, 1, 1, 1, 1};
        int[] arr5={6, 5, 4, 4, 2, 1};

        int[] expect={1,2,3,4,5,6};
        assertArrayEquals(expect,BubbleSort.BubbleSort(arr1));
        assertNotSame(expect,BubbleSort.BubbleSort(arr2));
        assertArrayEquals(expect,BubbleSort.BubbleSort(arr3));
        assertNotSame(expect,BubbleSort.BubbleSort(arr4));
        assertNotSame(expect,BubbleSort.BubbleSort(arr5));


    }


}
