/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.krisnaconsulting.app;

import com.rabbitmq.client.Channel;
import com.rabbitmq.client.Connection;
import com.rabbitmq.client.ConnectionFactory;
import java.io.IOException;
import java.util.concurrent.TimeoutException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author kelvin
 */
public class Send extends Thread {
    
    private int thread = 0;
    private  String QUEUE_NAME = "hello"+thread;

    public int getThread() {
        return thread;
    }

    public void setThread(int thread) {
        this.thread = thread;
    }
    
    
    private boolean send (){
       for (int i = 0; i < 1000000; i ++){
        try {
            ConnectionFactory factory = new ConnectionFactory();
            factory.setHost("localhost");
            Connection connection = factory.newConnection();
            Channel channel = connection.createChannel();

            channel.queueDeclare(QUEUE_NAME, false, false, false, null);
            String message = "Hello World!" + i + " Thread = " + this.getThread();
            channel.basicPublish("", QUEUE_NAME, null, message.getBytes());
            System.out.println(" [x] Sent '" + message + "'");

        
            channel.close();
             connection.close();
        } catch (TimeoutException ex) {
            Logger.getLogger(App.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }  catch (IOException ex) {
               Logger.getLogger(Send.class.getName()).log(Level.SEVERE, null, ex);
               return false;
        }
            long sleep = 1;
            try {
                Thread.sleep(sleep);
            } catch (InterruptedException ex) {
                Logger.getLogger(App.class.getName()).log(Level.SEVERE, null, ex);
                return false;
            }
        }
       return true;
    }
    
    public void run(){
        send();
    }

    public Send(int i) {
        this.thread = i;
        this.QUEUE_NAME = "hello"+thread;
    }
    
}