class Product:
    # constructor dengan parameter default
    # kalau tidak diisi, nilai awal id=0, name="", price=0, stock=0, image=""
    def __init__(self, id=0, name="", price=0, stock=0, image=""):
        self.__id = id          # atribut privat untuk id produk
        self.__name = name      # atribut privat untuk nama produk
        self.__price = price    # atribut privat untuk harga produk
        self.__stock = stock    # atribut privat untuk stok produk
        self.__image = image    # atribut privat untuk path gambar produk

    # setter dan getter untuk id
    def setId(self, id):
        self.__id = id
    def getId(self):
        return self.__id

    # setter dan getter untuk name
    def setName(self, name):
        self.__name = name
    def getName(self):
        return self.__name

    # setter dan getter untuk price
    def setPrice(self, price):
        self.__price = price
    def getPrice(self):
        return self.__price

    # setter dan getter untuk stock
    def setStock(self, stock):
        self.__stock = stock
    def getStock(self):
        return self.__stock

    # setter dan getter untuk image
    def setImage(self, image):
        self.__image = image
    def getImage(self):
        return self.__image

    # method untuk menampilkan data produk dalam 1 baris
    def show(self):
        print(f"{self.__id} | {self.__name} | rp{self.__price} | stock: {self.__stock} | {self.__image}")
