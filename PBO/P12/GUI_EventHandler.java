import java.awt.Color;
import java.awt.Container;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;

public class GUI_EventHandler {
    public static void main(String[] args) {
        JFrame frame = new JFrame();
        frame.setTitle("Belajar Epent Handler");
        frame.setSize(500, 500);
        frame.setLocationRelativeTo(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setVisible(true);
        frame.setResizable(true);
    
        Color orangecolor = new Color(255, 175, 175);
        Container wadah = frame.getContentPane();
        wadah.setBackground(orangecolor);
    
        JLabel label = new JLabel("Angka Pertama : ");
        frame.setLayout(null);
        frame.add(label);
        label.setBounds(20, 20, 150, 30);
    
        JTextField textfield = new JTextField();
        frame.add(textfield);
        textfield.setBounds(150, 20, 230, 30);

        JLabel label2 = new JLabel("Angka Kedua : ");
        frame.setLayout(null);
        frame.add(label2);
        label2.setBounds(20, 60, 150, 30);

        JTextField textfield2 = new JTextField();
        frame.add(textfield2);
        textfield2.setBounds(150, 60, 230, 30);

        JButton button = new JButton("Calculate Niggas");
        frame.add(button);
        button.setBounds(150, 100, 230, 30);
        
        JLabel label3 = new JLabel("Hasil : ");
        frame.setLayout(null);
        frame.add(label3);
        label3.setBounds(20, 130, 150, 30);

        button.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent snigger) {

                if(textfield.getText().isEmpty() || textfield2.getText().isEmpty()) {
                    JOptionPane.showMessageDialog(null, "Masukkan angka niggers!");
                } else {
                    int a1 = Integer.parseInt(textfield.getText());
                    int a2 = Integer.parseInt(textfield2.getText());
                    int res = a1 + a2;
                    label3.setText(Integer.toString(res));   
                }
            }
        });
    }
}