package com.lab4.mujavahome;
import com.lab4.mujavahome.src.BackPack;

import org.junit.Test;
//import static org.hamcrest.CoreMatchers.containsString;
import static org.junit.matchers.JUnitMatchers.containsString;
import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertNotEquals;
import static org.junit.Assert.assertThat;




public class BackPackTest {
    class Testcase {
        public int m;
        public int n;
        public int[] w;
        public int[] p;
        Testcase(int m, int n,int[]w,int[]p){
            this.m=m;
            this.n=n;
            this.w=w;
            this.p=p;
        }
    };

    @Test
    public void test_BackPack_Solution() {
        int w1[] = {3, 4, 5};
        int p1[] = {4, 5, 6};
        int w2[] = {13,14,15};
        int p2[] = {4, 6, 5};
        Testcase t1=new Testcase(-1,-1,w1,p1);
        Testcase t2=new Testcase(-1,3,w1,p1);
        Testcase t3=new Testcase(10,3,w1,p1);
        Testcase t4=new Testcase(10,3,w1,p2);
        Testcase t5=new Testcase(10,3,w2,p1);
        int m=0,n=0,res=-1;
        m=t1.m>0? t1.m: m;
        n=t1.n>0? t1.n: n;
        try{
            res=BackPack.BackPack_Solution(t1.m,t1.n,t1.w,t1.p)[n][m];

        }catch(Exception e){
            assertThat(e.getMessage(), containsString("0"));
        }
        m=t2.m>0? t2.m: m;
        n=t2.n>0? t2.n: n;
        try{
            res=BackPack.BackPack_Solution(t2.m,t2.n,t2.w,t2.p)[n][m];

        }catch(Exception e){
            assertThat(e.getMessage(), containsString("0"));
        }
        m=t3.m>0? t3.m: m;
        n=t3.n>0? t3.n: n;
        assertEquals(11, BackPack.BackPack_Solution(t3.m,t3.n,t3.w,t3.p)[n][m]);
        m=t4.m>0? t4.m: m;
        n=t4.n>0? t4.n: n;
        assertEquals(11, BackPack.BackPack_Solution(t4.m,t4.n,t4.w,t4.p)[n][m]);
        m=t5.m>0? t5.m: m;
        n=t5.n>0? t5.n: n;
        assertNotEquals(11, BackPack.BackPack_Solution(t5.m,t5.n,t5.w,t4.p)[n][m]);

    }

}