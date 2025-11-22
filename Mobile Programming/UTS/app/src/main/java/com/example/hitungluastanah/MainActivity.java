package com.example.hitungluastanah;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

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
        setContentView(R.layout.activity_main);

        //membuat object bernama 'moves' untuk mengandung 'id' 'btn_move' yang berasal dari XML
        Button moves = findViewById(R.id.btn_move);

        //mengatur logic dari button 'moves' ketike di klik
        moves.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //membuat sebuah intent dengan tujuan untuk berpindah atau mengaitkan class saat ini dengan class lain
                Intent moveit = new Intent(MainActivity.this, AnotherActivity.class);
                startActivity(moveit); //aktivitas berpindah dimulai ketika button di klik
            }
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}