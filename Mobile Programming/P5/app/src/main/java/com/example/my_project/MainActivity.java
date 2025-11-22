package com.example.my_project;

import android.media.MediaPlayer;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    Button playpause, stop;
    Button prev, next;
    MediaPlayer mp;
    boolean play = true;
    int[] songs = {R.raw.phonk01, R.raw.phonk02, R.raw.phonk03, R.raw.phonk04, R.raw.phonk05, R.raw.phonk06, R.raw.phonk07};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        playpause = (Button)findViewById(R.id.btn_play);
        stop = (Button)findViewById(R.id.btn_stop);
        prev = (Button)findViewById(R.id.btn_prev);
        next = (Button)findViewById(R.id.btn_next);

        final int[] startingPoint = {0};
        
        mp = MediaPlayer.create(getApplicationContext(), songs[startingPoint[0]]);

        playpause.setOnClickListener(v -> {
            if (play) {
                mp.start();
                playpause.setText("Pause");
            } else {
                mp.pause();
                playpause.setText("Play");
            }
            play = !play;
        });

        stop.setOnClickListener(v -> {
            if (mp != null) {
                mp.stop();
                try {
                    mp.prepare();
                } catch (IOException e) {
                    e.printStackTrace();
                }
                mp.seekTo(0);
                play = true;
                playpause.setText("Play");
            }
        });

        next.setOnClickListener(v -> {
            if (mp != null) {
                mp.stop();
                mp.release();
            }
            startingPoint[0] = (startingPoint[0] + 1) % songs.length;
            mp = MediaPlayer.create(getApplicationContext(), songs[startingPoint[0]]);
            mp.start();
            playpause.setText("Pause");
            play = false;
        });

        prev.setOnClickListener(v -> {
            if (mp != null) {
                mp.stop();
                mp.release();
            }
            startingPoint[0] = (startingPoint[0] - 1 + songs.length) % songs.length;
            mp = MediaPlayer.create(getApplicationContext(), songs[startingPoint[0]]);
            mp.start();
            playpause.setText("Pause");
            play = false;
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}