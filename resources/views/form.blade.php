<div class="mb-3">
    <label>Tên mô hình</label>
    <input type="text" name="name" value="{{ old('name', $modelProduct->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Giá</label>
    <input type="number" name="price" value="{{ old('price', $modelProduct->price ?? '') }}" class="form-control" step="0.01" required>
</div>

<div class="mb-3">
    <label>Số lượng</label>
    <input type="number" name="quantity" value="{{ old('quantity', $modelProduct->quantity ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Mô tả</label>
    <textarea name="description" class="form-control">{{ old('description', $modelProduct->description ?? '') }}</textarea>
</div>