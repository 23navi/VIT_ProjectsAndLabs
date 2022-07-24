package com.example.isaaprojectapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class ListPage extends AppCompatActivity {
    public void torestart(View view)
    {
        Button button =  findViewById(R.id.go);
        Intent intent = new Intent(this,RestartPage.class);
        startActivity(intent);
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_page);
    }
}