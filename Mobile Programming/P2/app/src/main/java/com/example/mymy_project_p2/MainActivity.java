package com.example.mymy_project_p2;

import static com.example.mymy_project_p2.R.layout.activity_main;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(activity_main);

        Button times = findViewById(R.id.btn_times);
        Button dvde = findViewById(R.id.btn_divide);
        Button plus = findViewById(R.id.btn_plus);
        Button mins = findViewById(R.id.btn_minus);

        Button mov1 = findViewById(R.id.btn_movepage);
        EditText inp1 = findViewById(R.id.txtinpt1);
        EditText inp2 = findViewById(R.id.txtinpt2);
        TextView z = findViewById(R.id.txtview1);

        times.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int x = Integer.parseInt(inp1.getText().toString());
                int y = Integer.parseInt(inp2.getText().toString());
                int Z = x * y;

                z.setText(String.valueOf(Z));
            }
        });

        plus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int x = Integer.parseInt(inp1.getText().toString());
                int y = Integer.parseInt(inp2.getText().toString());
                int Z = x + y;

                z.setText(String.valueOf(Z));
            }
        });

        mins.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int x = Integer.parseInt(inp1.getText().toString());
                int y = Integer.parseInt(inp2.getText().toString());
                int Z = x - y;

                z.setText(String.valueOf(Z));
            }
        });

        dvde.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int x = Integer.parseInt(inp1.getText().toString());
                int y = Integer.parseInt(inp2.getText().toString());
                int Z = x / y;

                z.setText(String.valueOf(Z));
            }
        });

        mov1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                /*Intent moveit = new Intent(MainActivity.this, Activity2.class);
                String dat1 = inp1.getText().toString();
                String dat2 = inp2.getText().toString();
                moveit.putExtra("txt1", inp1.getText().toString());
                moveit.putExtra("txt2", dat2);
                startActivity(moveit);*/

                Bundle fastpak = new Bundle();
                fastpak.putString("txt1", inp1.getText().toString());
                fastpak.putString("txt2", inp2.getText().toString());
                Intent movegga = new Intent(MainActivity.this, Activity2.class);
                movegga.putExtras(fastpak);
                startActivity(movegga);
            }
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}