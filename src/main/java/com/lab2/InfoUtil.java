package com.lab2;

import java.util.HashMap;
import java.util.Map;
import java.util.Set;

public class InfoUtil {
    Map<String,String> users=new HashMap<String, String>();
    public InfoUtil(){
        users.put("3017218053","https://gitee.com/chenkuochih/software_test.git");
        users.put("3017218054","https://gitee.com/roshan0/software_test.git");
        users.put("3017218055","https://gitee.com/dai88X/software_test.git");
        users.put("3017218056","https://github.com/Bing-Max/SoftwareTest.git");
        users.put("3017218057","https://github.com/YumengGuo/SoftwareTesting");
        users.put("3017218058","https://github.com/howAreYouHkk/SoftwareTestingTechnology");
        users.put("3017218059","https://github.com/Eternal144/Software-Testing");
        users.put("3017218060","https://gitee.com/HangxueLiu/softwareTest.git");
        users.put("3017218061","https://github.com/qq734628996/software-test");
        users.put("3017218062","https://github.com/cxdzb/software-testing-technology");
        users.put("3017218063","https://github.com/PathfinderTJU/Softwate_test_homework");
        users.put("3017218064","https://github.com/Martin12345677/software_testing_technology");
        users.put("3017218065","https://gitee.com/panliming0418/softwareTestingTechnology.git");
        users.put("3017218066","https://gitee.com/taytaytaytaylor11/SoftwareTesting");
        users.put("3017218067","https://gitee.com/surumeng/test3017218067");
        users.put("3017218068","https://gitee.com/Sunhanyu/SoftwareTestingTechnology.git");
        users.put("3017218069","https://github.com/HaomingSun-1895/Software-Testing-hw.git");
        users.put("3017218070","https://github.com/Taoboan1999/Taoboan1999");
        users.put("3017218071","https://github.com/tianzhaotju/software_testing");
        users.put("3017218072","https://github.com/ZhaomengWang/software_testing");
    }
    public String getPass(String id){
        return users.get(id);
    }
    public Set<String> getUsers(){
        return users.keySet();
    }
}
