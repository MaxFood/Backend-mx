package com.imagem.imageapi.Controller;

import com.cloudinary.Cloudinary;
import com.cloudinary.utils.ObjectUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.Map;

@RestController
@RequestMapping
public class UploadController {

    @Autowired
    private Cloudinary cloudinary;

    @PostMapping("/api/upload/{nomedoarquivo}")
    public ResponseEntity<?> uploadImage(@RequestParam("file") MultipartFile file, @PathVariable String nomedoarquivo) {
        try {
            String novoNome = nomedoarquivo;

            Map uploadResult = cloudinary.uploader().upload(
                    file.getBytes(),
                    ObjectUtils.asMap(
                            "public_id", novoNome
                    )
            );

            return ResponseEntity.ok(uploadResult);
        } catch (IOException e) {
            e.printStackTrace();
            return ResponseEntity.status(500).body("Erro ao fazer upload da imagem: " + e.getMessage());
        }
    }
}
