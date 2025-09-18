#include <iostream>
#include <vector>
#include "Product.cpp"  

using namespace std;

// vector products dipakai untuk menyimpan semua data produk
vector<Product> products;   

// fungsi untuk menambahkan produk baru
void addProduct() {
    Product p; // buat object produk sementara
    int id, price, stock;
    string name, image;

    // input id produk
    cout << "masukkan id: ";
    cin >> id;
    cin.ignore(); // hapus newline di buffer supaya getline tidak ke-skip

    // input nama produk
    cout << "masukkan nama: ";
    getline(cin, name);

    // input harga produk
    cout << "masukkan harga: ";
    cin >> price;

    // input stok produk
    cout << "masukkan stok: ";
    cin >> stock;
    cin.ignore();

    // input path gambar produk
    cout << "masukkan path gambar: ";
    getline(cin, image);

    // set semua data produk ke object
    p.setid(id);
    p.setname(name);
    p.setprice(price);
    p.setstock(stock);
    p.setimage(image);

    // simpan object produk ke dalam vector products
    products.push_back(p);
    cout << "produk berhasil ditambahkan!\n";
}

// fungsi untuk menampilkan semua produk yang ada
void showProducts() {
    // jika vector masih kosong
    if (products.empty()) {
        cout << "belum ada produk.\n";
        return;
    }

    // looping semua produk dan tampilkan dengan fungsi show()
    for (auto &p : products) {
        p.show();
    }
}

// fungsi untuk mencari produk berdasarkan id
Product* findProduct(int id) {
    // cek semua produk dalam vector
    for (auto &p : products) {
        if (p.getid() == id) {
            // return pointer ke produk kalau ketemu
            return &p;
        }
    }
    // kalau tidak ketemu return nullptr
    return nullptr;
}

// fungsi untuk mengupdate data produk
void updateProduct() {
    int id;
    cout << "masukkan id produk yang ingin diupdate: ";
    cin >> id;
    cin.ignore();

    // cari produk yang dimaksud
    Product* p = findProduct(id);
    if (p == nullptr) {
        cout << "produk tidak ditemukan.\n";
        return;
    }

    // input data baru untuk produk
    string name, image;
    int price, stock;

    cout << "nama baru: ";
    getline(cin, name);
    cout << "harga baru: ";
    cin >> price;
    cout << "stok baru: ";
    cin >> stock;
    cin.ignore();
    cout << "path gambar baru: ";
    getline(cin, image);

    // update data ke object produk
    p->setname(name);
    p->setprice(price);
    p->setstock(stock);
    p->setimage(image);

    cout << "produk berhasil diupdate!\n";
}

// fungsi untuk menghapus produk berdasarkan id
void deleteProduct() {
    int id;
    cout << "masukkan id produk yang ingin dihapus: ";
    cin >> id;

    // cari produk dalam vector
    for (auto it = products.begin(); it != products.end(); ++it) {
        if (it->getid() == id) {
            // hapus produk dari vector
            products.erase(it);
            cout << "produk berhasil dihapus!\n";
            return;
        }
    }
    // kalau id tidak ditemukan
    cout << "produk tidak ditemukan.\n";
}

int main() {
    int choice;

    do {
        // tampilkan menu utama
        cout << "\n=== menu toko elektronik ===\n";
        cout << "1. tambah produk\n";
        cout << "2. tampilkan produk\n";
        cout << "3. update produk\n";
        cout << "4. hapus produk\n";
        cout << "5. cari produk\n";
        cout << "0. keluar\n";
        cout << "pilih menu: ";
        cin >> choice;
        cin.ignore();

        // pilih menu sesuai input user
        switch (choice) {
            case 1: 
                addProduct(); 
                break;
            case 2: 
                showProducts(); 
                break;
            case 3: 
                updateProduct(); 
                break;
            case 4: 
                deleteProduct(); 
                break;
            case 5: {
                int id;
                cout << "masukkan id produk: ";
                cin >> id;
                // cari produk dengan id yang dimasukkan
                Product* p = findProduct(id);
                if (p != nullptr) 
                    p->show(); // tampilkan produk kalau ada
                else 
                    cout << "produk tidak ditemukan.\n";
                break;
            }
            case 0: 
                cout << "keluar program.\n"; 
                break;
            default: 
                cout << "pilihan tidak valid.\n";
        }
    } while (choice != 0); // program akan terus jalan sampai user pilih 0

    return 0;
}
