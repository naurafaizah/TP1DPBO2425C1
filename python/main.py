from Product import Product   # import class product dari file product.py

# list untuk menyimpan semua produk
products = []

# tambah data produk baru
def addProduct():
    p = Product()  # bikin objek product kosong
    id = int(input("masukkan id: "))
    name = input("masukkan nama: ")
    price = int(input("masukkan harga: "))
    stock = int(input("masukkan stok: "))
    image = input("masukkan path gambar: ")

    # isi data ke dalam objek lewat setter
    p.setId(id)
    p.setName(name)
    p.setPrice(price)
    p.setStock(stock)
    p.setImage(image)

    # masukin ke list products
    products.append(p)
    print("produk berhasil ditambahkan!")

# tampilkan semua data produk
def showProducts():
    if not products:
        print("belum ada produk.")
        return
    for p in products:
        p.show()   # panggil method show dari class product

# cari produk berdasarkan id
def findProduct(id):
    for p in products:
        if p.getId() == id:  # cek apakah id cocok
            return p
    return None

# update data produk
def updateProduct():
    id = int(input("masukkan id produk yang ingin diupdate: "))
    p = findProduct(id)

    if p is None:
        print("produk tidak ditemukan.")
        return

    # input data baru
    name = input("nama baru: ")
    price = int(input("harga baru: "))
    stock = int(input("stok baru: "))
    image = input("path gambar baru: ")

    # update data lewat setter
    p.setName(name)
    p.setPrice(price)
    p.setStock(stock)
    p.setImage(image)

    print("produk berhasil diupdate!")

# hapus data produk
def deleteProduct():
    id = int(input("masukkan id produk yang ingin dihapus: "))
    for i, p in enumerate(products):
        if p.getId() == id:  # kalau id cocok, hapus dari list
            del products[i]
            print("produk berhasil dihapus!")
            return
    print("produk tidak ditemukan.")

# menu utama program
def main():
    while True:
        print("\n=== menu toko elektronik ===")
        print("1. tambah produk")
        print("2. tampilkan produk")
        print("3. update produk")
        print("4. hapus produk")
        print("5. cari produk")
        print("0. keluar")
        choice = input("pilih menu: ")

        if choice == "1":
            addProduct()
        elif choice == "2":
            showProducts()
        elif choice == "3":
            updateProduct()
        elif choice == "4":
            deleteProduct()
        elif choice == "5":
            id = int(input("masukkan id produk: "))
            p = findProduct(id)
            if p:
                p.show()
            else:
                print("produk tidak ditemukan.")
        elif choice == "0":
            print("keluar program.")
            break
        else:
            print("pilihan tidak valid.")

# titik masuk program
if __name__ == "__main__":
    main()
