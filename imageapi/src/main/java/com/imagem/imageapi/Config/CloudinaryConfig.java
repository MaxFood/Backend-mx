package com.imagem.imageapi.Config;

import com.cloudinary.Cloudinary;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import java.util.HashMap;
import java.util.Map;

@Configuration
public class CloudinaryConfig {

    @Bean
    public Cloudinary cloudinary() {
        Map<String, String> config = new HashMap<>();
        config.put("cloud_name", "dvgsipntf");
        config.put("api_key", "629927595716147");
        config.put("api_secret", "BnuapZWmxLP5rQO7fbjcsg63x04");

        return new Cloudinary(config);
    }
}
