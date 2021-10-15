package com.mycompany.graficacion;

import java.awt.Color;
import java.awt.Graphics;
import javax.swing.JPanel;

/**
 *
 * @author krist
 */
public class vocho extends JPanel {

    @Override
    public void paintComponent(Graphics g) {
        super.paintComponent(g);
//TECHO DEL VW
        g.setColor(Color.GREEN);
        g.fillOval(100, 100, 300, 300);
//PARABRISAS VW
        g.setColor(Color.CYAN);
        g.fillOval(120, 120, 260, 260);
//COFRE DEL VW
        g.setColor(Color.GREEN);
        g.fillArc(110, 120, 290, 260, 180, 180);
//SALPICADERA IZQUIERDO VW
        g.setColor(Color.GREEN);
        g.fillOval(60, 250, 140, 160);
//SALPICADERA DERECHA VW
        g.setColor(Color.GREEN);
        g.fillOval(300, 250, 140, 160);
//FARO IZQUIERDO VW
        g.setColor(Color.YELLOW);
        g.fillOval(80, 270, 80, 100);
//SALPICADERA DERECHA VW
        g.setColor(Color.YELLOW);
        g.fillOval(340, 270, 80, 100);
//DEFENSA VW
        g.setColor(Color.GRAY);
        g.fillOval(55, 375, 390, 35);
//Placa

        g.setColor(Color.white);
        g.fillRect(220, 380, 50, 25);
        g.setColor(Color.BLACK);
        g.drawString("GD82UF", 220, 395);

        g.setColor(Color.BLACK);
        g.fillRect(100, 400, 30, 30);
        g.fillRect(380, 400, 30, 30);
//Retrovisores
        g.setColor(Color.green);
        g.fillOval(70, 225, 40, 40);
        g.setColor(Color.green);
        g.fillOval(390, 225, 40, 40);
//Limpiaparabrizas
        g.setColor(Color.black);
        g.drawLine(280, 250, 220, 170);
        g.drawLine(320, 250, 260, 170);
//espejo
        g.drawLine(240, 120, 240, 130);
        g.drawLine(260, 120, 260, 130);
        g.fillRect(230, 130, 40, 10);
    }

}
