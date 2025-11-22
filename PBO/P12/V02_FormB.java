package P12;

import java.awt.Color;
import java.awt.Container;

import javax.swing.JFrame;
import javax.swing.JLabel;

public class V02_FormB extends JFrame {
    // Deklarasi variabel
    JLabel label3;
    
    public V02_FormB(String catcher) {
        iniComponents();
        label3.setText(catcher);
    }

    private void iniComponents() { 
        JFrame frame = new JFrame();
        frame.setTitle("FORM B");
        frame.setSize(300, 300);
        frame.setLocationRelativeTo(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setResizable(true);
        frame.setVisible(true);

        Color orangecolor = new Color(255, 175, 175);
        Container wadah = frame.getContentPane();
        wadah.setBackground(orangecolor);

        label3 = new JLabel("Hasil");
        frame.add(label3);
        label3.setBounds(50, 50, 200, 30);
    }
}
