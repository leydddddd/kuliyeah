package com.example.hitungluastanah;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class AnotherActivity extends AppCompatActivity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.second_activity);

        //membuat objek yang mengandung 'id' dari XML 'second_activity'
        EditText inputAlas = findViewById(R.id.inpAlas);
        EditText inputTinggi = findViewById(R.id.inpTinggi);
        EditText inputSisi = findViewById(R.id.inpSisi);

        Button calculate = findViewById(R.id.btn_calc);

        TextView outputLP = findViewById(R.id.outLP);
        TextView outputLS = findViewById(R.id.outLS);
        TextView outputT = findViewById(R.id.outDirt);

        //membuat logika dari button 'calculate' ketika di klik
        calculate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //menyimpan setiap input dalam bentuk float agar lebih flexibel
                float input1 = Float.parseFloat(inputAlas.getText().toString());
                float input2 = Float.parseFloat(inputTinggi.getText().toString());
                float input3 = Float.parseFloat(inputSisi.getText().toString());

                //melakukan perhitungan luas pada variabel nya masing-masing
                float luasBox = input3 * input3 * input3 * input3;
                float luasRec = ((float) 1 /2 * input1 * input2);

                //melakukan perhitungan luas tanah
                float luasTanah = luasBox + luasRec;

                outputLP.setText(String.valueOf(luasBox));
                outputLS.setText(String.valueOf(luasRec));
                outputT.setText(String.valueOf(luasTanah));
            }
        });


    }
}
