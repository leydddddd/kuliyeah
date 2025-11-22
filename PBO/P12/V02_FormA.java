package P12;

import java.awt.Button;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

public class V02_FormA extends JFrame implements ActionListener {
    JFrame frame;
    JTextField textfield;
    Button button;
    
    public V02_FormA() {
        iniComponents(); // memanggil method iniComponents
    }

    private void iniComponents() { // koding form komponen
        frame = new JFrame();
        frame.setTitle("FORM A");
        frame.setSize(500,500);
        frame.setLocationRelativeTo(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setResizable(true);
        frame.setVisible(true);

        JLabel label = new JLabel("Masukkan Nilai : ");
        frame.setLayout(null);
        frame.add(label);
        label.setBounds(50, 50, 200, 30);

        textfield = new JTextField();
        frame.add(textfield);
        textfield.setBounds(50, 100, 200, 30);

        button = new Button("Kirim Nilai");
        frame.add(button);
        button.setBounds(50, 150, 200, 30);
        button.addActionListener(this);
    }

    public static void main(String[] args) {
        V02_FormA X = new V02_FormA();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource() == button) {
            String a = textfield.getText();
            V02_FormB b = new V02_FormB(a);
        }
    }
}
