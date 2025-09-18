#include <string>
#include <iostream>

using namespace std;

// class product digunakan untuk merepresentasikan data produk
class Product{

    private:
        // atribut privat, hanya bisa diakses lewat method
        int id;         // id produk
        string name;    // nama produk
        int price;      // harga produk
        int stock;      // stok produk
        string image;   // path gambar produk

    public:

    // constructor default (kosong)
    Product() {
    }

    // setter untuk id
    void setid(int id){
        this->id = id; // this->id mengacu ke atribut class
    }

    // getter untuk id
    int getid(){
        return this->id;
    }

    // setter untuk name
    void setname(string name){
        this->name = name;
    }

    // getter untuk name
    string getname(){
        return this->name;
    }

    // setter untuk price
    void setprice(int price){
        this->price = price;
    }

    // getter untuk price
    int getprice(){
        return this->price;
    }

    // setter untuk stock
    void setstock(int stock){
        this->stock = stock;
    }

    // getter untuk stock
    int getstock(){
        return this->stock;
    }

    // setter untuk image
    void setimage(string image){
        this->image = image;
    }

    // getter untuk image
    string getimage(){
        return this->image;
    }

    // method show untuk menampilkan data produk dalam 1 baris
    void show() {
        cout << id << " | " << name << " | rp" 
             << price << " | stock: " << stock 
             << " | " << image << endl; 
    }

};
