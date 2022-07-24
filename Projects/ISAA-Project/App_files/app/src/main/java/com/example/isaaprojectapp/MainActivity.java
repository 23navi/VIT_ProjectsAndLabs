package com.example.isaaprojectapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    public void start(View view)
    {
        Button button =  findViewById(R.id.start);
        Intent intent = new Intent(this,Loading.class);
        startActivity(intent);
    }

    ImageView wave1,wave2,l;
    TextView sub;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}