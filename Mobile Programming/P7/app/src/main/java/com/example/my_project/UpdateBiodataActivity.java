package com.example.my_project;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class UpdateBiodataActivity extends AppCompatActivity {

    protected Cursor cursor;
    DataHelper dbHelper;
    Button btns1, btns2;
    EditText etext1, etext2, etext3, etext4, etext5;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_update_biodata);

        dbHelper = new DataHelper(this);
        etext1 = findViewById(R.id.editText11);
        etext2 = findViewById(R.id.editText12);
        etext3 = findViewById(R.id.editText13);
        etext4 = findViewById(R.id.editText14);
        etext5 = findViewById(R.id.editText15);
        btns1 = findViewById(R.id.button11);
        btns2 = findViewById(R.id.button12);

        SQLiteDatabase db = dbHelper.getReadableDatabase();
        cursor = db.rawQuery("SELECT * FROM biodata WHERE nama = '" +
                getIntent().getStringExtra("nama") + "'", null);
        if (cursor.moveToFirst()) {
            etext1.setText(cursor.getString(0));
            etext2.setText(cursor.getString(1));
            etext3.setText(cursor.getString(2));
            etext4.setText(cursor.getString(3));
            etext5.setText(cursor.getString(4));
        }

        btns1.setOnClickListener((arg0) -> {
            SQLiteDatabase wdb = dbHelper.getWritableDatabase();
            // Pastikan urutan sama dengan saat INSERT: no = etxt1, nama = etxt2, tgl = etxt3, jk = etxt4, alamat = etxt5
            wdb.execSQL("UPDATE biodata SET nama = '" +
                    etext2.getText().toString().trim() +
                    "', tgl = '" + etext3.getText().toString().trim() +
                    "', jk = '" + etext4.getText().toString().trim() +
                    "', alamat = '" + etext5.getText().toString().trim() +
                    "' WHERE no = '" + etext1.getText().toString().trim() + "'");
            Toast.makeText(getApplicationContext(), "Berhasil", Toast.LENGTH_LONG).show();
            MainActivity.ma.RefreshList();
            finish();
        });

        btns2.setOnClickListener((arg0) -> finish());

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.update_biodata_activity), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}
