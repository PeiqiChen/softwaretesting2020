package com.lab2.dao;


import com.lab2.InfoUtil;

public class UserDaoImpl implements IUserDao {
    public User enterPass(String id){
        User user=new User(id);
        InfoUtil infoUtil=new InfoUtil();
        user.pass=infoUtil.getPass(user.id);
        return user;
    }
}
