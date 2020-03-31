package com.lab2.driver;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

import com.lab2.dao.User;
import com.lab2.dao.UserDaoImpl;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;

public class Driver {
    WebDriver driver;

    public void openBrowser() {
//        DesiredCapabilities capabilities = DesiredCapabilities.chrome();
//        capabilities.setCapability("chrome.binary", "/Applications/Google\\ Chrome.app/Contents/MacOS/Google\\ Chrome");
//        System.out.println("/Applications/Google\\ Chrome.app/Contents/MacOS/Google\\ Chrome");
//        driver = new ChromeDriver(capabilities);
        String driverPath = System.getProperty("user.dir") + "/src/main/java/com/lab2/driver/resources/chromedriver";
        System.out.println(driverPath);
        System.setProperty("webdriver.chrome.driver", driverPath);
        driver = new ChromeDriver();
        driver.get("http://103.120.226.190/selenium-demo/git-repo");
    }
    public boolean login(String id){
        UserDaoImpl impl=new UserDaoImpl();
        User user= impl.enterPass(id);

        WebElement inputId =driver.findElement(By.name("user_number"));
        WebElement inputPass=driver.findElement(By.name("password"));
        WebElement qrBtn=driver.findElement(By.cssSelector(".btn"));
        JavascriptExecutor js = (JavascriptExecutor) driver;
        String code=(String)js.executeScript("return document.getElementsByTagName('code')[1].innerText");

        inputId.clear();
        inputPass.clear();
        inputId.sendKeys(user.id);
        inputPass.sendKeys(user.pass);
        qrBtn.click();
        System.out.println(code);

        return false;
    }
    public void close(){
        driver.quit();
    }


    public static void main(String[] args) {
        Driver idriver=new Driver();
        idriver.openBrowser();
        idriver.login("3017218054");
        idriver.login("3017218053");
        idriver.login("3017218055");
        idriver.login("3017218056");
        idriver.close();
    }

}
