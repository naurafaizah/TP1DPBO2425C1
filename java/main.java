import java.util.ArrayList;
import java.util.Scanner;

public class main {
    // arraylist untuk menyimpan semua produk
    static ArrayList<Product> products = new ArrayList<>();
    // scanner untuk input dari user
    static Scanner sc = new Scanner(System.in);

    // method untuk tambah produk baru
    public static void addProduct() {
        Product p = new Product();

        System.out.print("masukkan id: ");
        int id = sc.nextInt();
        sc.nextLine(); // buang enter biar input string tidak ke-skip

        System.out.print("masukkan nama: ");
        String name = sc.nextLine();

        System.out.print("masukkan harga: ");
        int price = sc.nextInt();

        System.out.print("masukkan stok: ");
        int stock = sc.nextInt();
        sc.nextLine();

        System.out.print("masukkan path gambar: ");
        String image = sc.nextLine();

        // simpan data ke objek produk
        p.setId(id);
        p.setName(name);
        p.setPrice(price);
        p.setStock(stock);
        p.setImage(image);

        // tambahkan ke arraylist
        products.add(p);
        System.out.println("produk berhasil ditambahkan!");
    }

    // method untuk menampilkan semua produk
    public static void showProducts() {
        if (products.isEmpty()) {
            System.out.println("belum ada produk.");
            return;
        }
        for (Product p : products) {
            p.show();
        }
    }

    // method untuk mencari produk berdasarkan id
    public static Product findProduct(int id) {
        for (Product p : products) {
            if (p.getId() == id) {
                return p;
            }
        }
        return null;
    }

    // method untuk update data produk
    public static void updateProduct() {
        System.out.print("masukkan id produk yang ingin diupdate: ");
        int id = sc.nextInt();
        sc.nextLine();

        Product p = findProduct(id);
        if (p == null) {
            System.out.println("produk tidak ditemukan.");
            return;
        }

        System.out.print("nama baru: ");
        String name = sc.nextLine();

        System.out.print("harga baru: ");
        int price = sc.nextInt();

        System.out.print("stok baru: ");
        int stock = sc.nextInt();
        sc.nextLine();

        System.out.print("path gambar baru: ");
        String image = sc.nextLine();

        // update nilai atribut produk
        p.setName(name);
        p.setPrice(price);
        p.setStock(stock);
        p.setImage(image);

        System.out.println("produk berhasil diupdate!");
    }

    // method untuk hapus produk
    public static void deleteProduct() {
        System.out.print("masukkan id produk yang ingin dihapus: ");
        int id = sc.nextInt();

        Product target = null;
        for (Product p : products) {
            if (p.getId() == id) {
                target = p;
                break;
            }
        }

        if (target != null) {
            products.remove(target);
            System.out.println("produk berhasil dihapus!");
        } else {
            System.out.println("produk tidak ditemukan.");
        }
    }

    // main program
    public static void main(String[] args) {
        int choice;

        // menu utama dalam bentuk do while
        do {
            System.out.println("\n=== menu toko elektronik ===");
            System.out.println("1. tambah produk");
            System.out.println("2. tampilkan produk");
            System.out.println("3. update produk");
            System.out.println("4. hapus produk");
            System.out.println("5. cari produk");
            System.out.println("0. keluar");
            System.out.print("pilih menu: ");
            choice = sc.nextInt();
            sc.nextLine();

            // eksekusi pilihan
            switch (choice) {
                case 1: addProduct(); break;
                case 2: showProducts(); break;
                case 3: updateProduct(); break;
                case 4: deleteProduct(); break;
                case 5:
                    System.out.print("masukkan id produk: ");
                    int id = sc.nextInt();
                    sc.nextLine();
                    Product p = findProduct(id);
                    if (p != null) {
                        p.show();
                    } else {
                        System.out.println("produk tidak ditemukan.");
                    }
                    break;
                case 0: System.out.println("keluar program."); break;
                default: System.out.println("pilihan tidak valid.");
            }
        } while (choice != 0);

        sc.close(); // tutup scanner
    }
}
