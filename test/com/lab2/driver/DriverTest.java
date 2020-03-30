package com.lab2.driver;

import org.junit.Test;
import org.junit.Before;
import org.junit.After;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.Wait;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.openqa.selenium.WebElement;

public class DriverTest {
    Driver driver;

    @Test
    public void LoginPage() {
        driver.openBrowser();
//        WebDriverWait wait = new WebDriverWait(driver, 10);
//        WebElement element = Wait.until(ExpectedConditions.elementToBeClickable(By.name(comlocator.Username_name)));
    }

//    @Before
//    public void openBrowser() {
//
//        System.setProperty("webdriver.gecko.driver", "./drivers/geckodriver.exe");
//        driver = new FirefoxDriver();
//        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
//        driver.get("https://www.google.co.in");
//        driver.manage().window().maximize();
//    }
//
//    @After
//    public void afterMethod() {
//        driver.close();
//    }

}