package com.example.mymy_project_p2;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

public class Activity2 extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main1);

        Button mov2 = findViewById(R.id.btn_movepage1);

        TextView text1 = findViewById(R.id.textview1);
        TextView text2 = findViewById(R.id.textview2);

        /*String rec1 = getIntent().getStringExtra("txt1");
        String rec2 = getIntent().getStringExtra("txt2");*/

        text1.setText(getIntent().getStringExtra("txt1"));
        text2.setText(getIntent().getStringExtra("txt2"));

        mov2.setOnClickListener(v -> {
            Intent moveag = new Intent(Activity2.this, MainActivity.class);
            startActivity(moveag);
        });
    }
}
