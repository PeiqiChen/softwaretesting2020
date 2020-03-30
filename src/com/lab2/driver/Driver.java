package com.lab2.driver;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

public class Driver {
    WebDriver driver;

    public void openBrowser() {

        System.setProperty("webdriver.gecko.driver", "/Users/chenpeiqi/Downloads/geckodriver");
        driver = new FirefoxDriver();
//        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
        driver.get("https://www.baidu.com");
        driver.manage().window().maximize();
    }

    public static void main(String[] args) {
        Driver idriver=new Driver();
        idriver.openBrowser();
    }


}