/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author himanshi sharma
 */
public class servlet extends HttpServlet {
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        String name=request.getParameter("name");
        String pass=request.getParameter("password");
        
        System.out.println("name: "+name);
        System.out.println("password: "+pass);
        response.setContentType("text/html;charset=UTF-8");
        
        PrintWriter out = response.getWriter();
        
        String html="<html>";
        html+="<body>";
        html+="<head><title>Form Details</title></head>";
        html+="Name:"+name;
        html+="<br>";
        html+="password:"+pass;
        html+="</body>";
        html+="</html>";
        
        out.println(html);
  
    }
}
