package com.example.my_proj;

import android.os.Bundle;
import android.widget.EditText;

import androidx.activity.EdgeToEdge;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class NextActivity extends AppCompatActivity{
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.next_activity);

        EditText carr_n = findViewById(R.id.carryName);
        EditText carr_j = findViewById(R.id.carryJobs);
        EditText carr_a = findViewById(R.id.carryAddrs);
        EditText carr_s = findViewById(R.id.carrySicks);
        EditText carr_i = findViewById(R.id.carryIdent);

        carr_n.setText(getIntent().getStringExtra("name"));
        carr_j.setText(getIntent().getStringExtra("jobs"));
        carr_a.setText(getIntent().getStringExtra("adrs"));

        if (getIntent().getStringExtra("rad1") != null) {
            carr_s.setText(getIntent().getStringExtra("rad1"));
        }
        if (getIntent().getStringExtra("rad2") != null) {
            carr_s.setText(getIntent().getStringExtra("rad2"));
        }
        if (getIntent().getStringExtra("rad3") != null) {
            carr_s.setText(getIntent().getStringExtra("rad3"));
        }

        if (getIntent().getStringExtra("check1") != null) carr_i.setText(getIntent().getStringExtra("check1"));
        if (getIntent().getStringExtra("check2") != null) carr_i.setText(getIntent().getStringExtra("check2"));
    }
}
