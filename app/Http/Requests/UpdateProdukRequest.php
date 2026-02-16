<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => 'required|unique:produks,nama_produk,' . $this->produk->id,
            'deskripsi_produk' => 'required|min:10',
            'kategori_produk_id' => 'required|exists:kategori_produks,id',
        ];
    }
    public function messages(): array
    {
        return [
            'nama_produk.required' => 'Nama Produk harus diisi',
            'deskripsi_produk.required' => 'Deskripsi Produk harus diisi',
            'kategori_produk.required' => 'Kategori Produk harus diisi',
            'kategori_produk_id.required' => 'Kategori Produk tidak ditemukan',
            'deskripsi_produk.min' => 'Deskripsi Produk minimal 10 karakter',
            'unique' => 'Nama Produk Sudah Ada',
        ];
    }
}
