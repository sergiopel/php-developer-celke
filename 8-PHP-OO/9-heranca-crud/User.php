<?php

class User extends Conn
{
    public object $conn;
    public array $formData;
    public int $id;

    public function list(): array
    {
        $this->conn = $this->connectDb();
        $query_users = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();
        $retorno = $result_users->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }

    public function create(): bool //deve retornar verdadeiro ou falso somente
    {
        //var_dump($this->formData);
        $this->conn = $this->connectDB(); //conecta ao banco
        $query_user = "INSERT INTO users (name, email, created) VALUES (:name, :email, NOW())";
        $add_user = $this->conn->prepare($query_user);
        $add_user->bindParam(':name', $this->formData['name']);
        $add_user->bindParam(':email', $this->formData['email']);
        $add_user->execute();

        if ($add_user->rowCount()){
            return true;
        } else {
            return false;
        }
    }

    public function view()
    {
        $this->conn = $this->connectDb();
        $query_user = "SELECT id, name, email, created, modified FROM users WHERE id = :id LIMIT 1";
        $result_user = $this->conn->prepare($query_user);
        $result_user->bindParam(':id', $this->id);
        $result_user->execute();
        $retorno_user = $result_user->fetch(); // aqui usa somente o fetch pq é um único registro que retornará
        return $retorno_user;
    }

    public function edit(): bool
    {
        $this->conn = $this->connectDb();
        $query_user = "UPDATE users SET name = :name, email = :email, modified = NOW() WHERE id = :id";
        $update_user = $this->conn->prepare($query_user);
        $update_user->bindParam(':id', $this->formData['id']);
        $update_user->bindParam(':name', $this->formData['name']);
        $update_user->bindParam(':email', $this->formData['email']);
        $update_user->execute();

        if ($update_user->rowCount()){
            return true;
        } else {
            return false;
        }

    }

    public function delete(): bool
    {
        $this->conn = $this->connectDb();
        $query_user = "DELETE FROM users WHERE id = :id LIMIT 1";
        $delete_user = $this->conn->prepare($query_user);
        $delete_user->bindParam(':id', $this->id);
        $deletou = $delete_user->execute();
        
        return $deletou;

    }
}
