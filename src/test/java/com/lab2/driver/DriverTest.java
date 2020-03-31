package com.lab2.driver;

import com.lab2.InfoUtil;
import org.junit.Test;
import org.junit.Before;
import org.junit.After;

import java.util.Iterator;
import java.util.Set;

public class DriverTest {
    Driver driver;
    Set<String> testCases=new InfoUtil().getUsers();

    @Test
    public void LoginPage() {
        Iterator it=testCases.iterator();
        while(it.hasNext()){
            driver.login((String)it.next());
        }
    }

    @Before
    public void beforeMethod() {
        driver=new Driver();
        driver.openBrowser();
    }

    @After
    public void afterMethod() {
        driver.close();
    }

}