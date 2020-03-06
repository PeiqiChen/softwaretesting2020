package com.lab1;


public class Pocket {
    public Pocket(){
        //TODO Auto-generated method stub
    }
    public boolean rangeInDefined(int x, int min,int max){
        return x>=min&&x<=max?true:false;
    }
    public boolean take(int v){
        if(rangeInDefined(v, 0, 39) || rangeInDefined(v, 50, 89)){
            if(rangeInDefined(v%10,0,3) || rangeInDefined(v%10,5,8)){
                return true;
            }
        } else if(rangeInDefined(v,40,49) || rangeInDefined(v,90,99) ){
            if(rangeInDefined(v%10,0,3)){
                return true;
            }
        }
        return false;
    };
//    public static void main(String[] args) {
//        System.out.println(Pocket.take(0));
//        System.out.println(Pocket.take(-1));
//        System.out.println(Pocket.take(20));
//        System.out.println(Pocket.take(9999));
//        System.out.println(Pocket.take(34));
//    }

}
