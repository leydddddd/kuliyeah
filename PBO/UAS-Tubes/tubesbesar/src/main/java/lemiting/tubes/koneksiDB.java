package lemiting.tubes;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author Arcleid
 */
public class koneksiDB {
    public static Connection koneksi;
    public static Connection konfigDB()throws SQLException{
        try {
            String url="jdbc:mysql://localhost/barat_db";
            String user="root";
            String pass="";
            DriverManager.registerDriver(new com.mysql.cj.jdbc.Driver());
            koneksi=DriverManager.getConnection(url, user, pass);
        } catch(Exception e) {
            JOptionPane.showMessageDialog(null, "Gagal Koneksi");
            System.err.println("Koneksi Gagal Cuy" + e.getMessage());
        }
        return koneksi;
    }
    
    public static void main(String []args)throws SQLException {
    Connection c = (Connection)koneksiDB.konfigDB();
    }
}