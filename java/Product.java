public class Product {
    // atribut private untuk menyimpan data produk
    private int id;
    private String name;
    private int price;
    private int stock;
    private String image;

    // constructor kosong, supaya bisa buat objek tanpa langsung isi data
    public Product() {
    }

    // setter dan getter untuk id
    public void setId(int id) {
        this.id = id;
    }
    public int getId() {
        return this.id;
    }

    // setter dan getter untuk name
    public void setName(String name) {
        this.name = name;
    }
    public String getName() {
        return this.name;
    }

    // setter dan getter untuk price
    public void setPrice(int price) {
        this.price = price;
    }
    public int getPrice() {
        return this.price;
    }

    // setter dan getter untuk stock
    public void setStock(int stock) {
        this.stock = stock;
    }
    public int getStock() {
        return this.stock;
    }

    // setter dan getter untuk image
    public void setImage(String image) {
        this.image = image;
    }
    public String getImage() {
        return this.image;
    }

    // method untuk menampilkan semua data produk dalam satu baris
    public void show() {
        System.out.println(id + " | " + name + " | Rp" + price + " | stock: " + stock + " | " + image);
    }
}
