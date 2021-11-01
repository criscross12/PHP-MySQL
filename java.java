/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Hilos;

import static java.lang.Thread.yield;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

/**
 *
 * @author krist
 */
public class proceso2 extends Thread {

    String nombre;
    int limite;
    JLabel label;

    public proceso2(String nombre, int limite, JLabel label) {
        this.nombre = nombre;
        this.limite = limite;
        this.label = label;
    }

    @Override
    public void run() {
      
          for (int i = 0; i < limite; i++) {
            try {
                System.out.println(nombre + "avanzar");
                label.setLocation(i,0);
                Thread.sleep(50);
            } catch (InterruptedException ex) {
                Logger.getLogger(Hilos.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        JOptionPane.showMessageDialog(null, nombre + "");
        yield();
    }
}
