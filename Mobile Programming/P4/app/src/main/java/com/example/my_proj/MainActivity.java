package com.example.my_proj;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;

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

        EditText names = findViewById(R.id.inpName);
        EditText jobs = findViewById(R.id.inpJob);
        EditText adrs = findViewById(R.id.inpAddr);

        Button submit = findViewById(R.id.btn_submit);

        RadioButton rad1 = findViewById(R.id.radBut1);
        RadioButton rad2 = findViewById(R.id.radBut2);
        RadioButton rad3 = findViewById(R.id.radBut3);

        CheckBox check1 = findViewById(R.id.checklist1);
        CheckBox check2 = findViewById(R.id.checklist2);

        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Bundle packaging = new Bundle();
                packaging.putString("name", names.getText().toString());
                packaging.putString("jobs", jobs.getText().toString());
                packaging.putString("adrs", adrs.getText().toString());
                if (rad1.isChecked()) packaging.putString("rad1", rad1.getText().toString());
                if (rad2.isChecked()) packaging.putString("rad2", rad2.getText().toString());
                if (rad3.isChecked()) packaging.putString("rad3", rad3.getText().toString());
                if (check1.isChecked()) packaging.putString("check1", check1.getText().toString());
                if (check2.isChecked()) packaging.putString("check2", check2.getText().toString());
                Intent movepak = new Intent(MainActivity.this, NextActivity.class);
                movepak.putExtras(packaging);
                startActivity(movepak);
            }
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}