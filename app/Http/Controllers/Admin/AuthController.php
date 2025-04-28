<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }

    public function forgetPassword(): View
    {
        return view('admin.auth.forgot-password');
    }

}






//// DatabaseConnection.java
//import java.sql.Connection;
//import java.sql.DriverManager;
//import java.sql.SQLException;
//
//public class DatabaseConnection {
//    private static final String URL = "jdbc:mysql://localhost:3306/students_db";
//    private static final String USER = "root";
//    private static final String PASSWORD = "";
//
//    public static Connection connect() {
//        Connection conn = null;
//        try {
//            conn = DriverManager.getConnection(URL, USER, PASSWORD);
//        } catch (SQLException e) {
//    System.out.println("Connection Error: " + e.getMessage());
//}
//        return conn;
//    }
//}
