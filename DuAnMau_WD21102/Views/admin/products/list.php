<style>
  /* ====== CARD CONTAINER ====== */
  .admin-list-card {
    background: linear-gradient(145deg, #0b0b10, #161625);
    border: 1px solid rgba(255, 255, 255, 0.06);
    padding: 24px;
    border-radius: 18px;
    box-shadow: 0 8px 40px rgba(100, 0, 255, 0.12);
    backdrop-filter: blur(8px);
  }

  /* ====== HEADER ====== */
  .admin-list-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
  }

  .admin-list-title {
    margin: 0;
    font-size: 1.35rem;
    font-weight: 700;
    background: linear-gradient(90deg, #ff00ff, #ff9900);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 8px rgba(255, 153, 0, 0.25);
  }

  /* ====== BUTTONS ====== */
  .btn-create {
    background: linear-gradient(90deg, #00c6ff, #0072ff);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    padding: 8px 16px;
    transition: 0.25s ease;
  }

  .btn-create:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 16px rgba(0, 150, 255, 0.4);
  }

  .back-btn {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 8px 14px;
    border-radius: 10px;
    transition: 0.25s ease;
  }

  .back-btn:hover {
    background: rgba(255, 255, 255, 0.05);
    transform: translateY(-2px);
  }

  /* ====== TABLE ====== */
  .table {
    color: #e9e9f0;
    border-collapse: separate;
    border-spacing: 0 10px;
  }

  .table thead th {
    background: linear-gradient(90deg, #171729, #231a38);
    color: #fff;
    border: none;
    vertical-align: middle;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
    padding: 12px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.4px;
  }

  .table tbody tr {
    background: rgba(255, 255, 255, 0.02);
    border-radius: 10px;
    transition: transform .15s ease, box-shadow .2s ease;
  }

  .table tbody tr:hover {
    transform: scale(1.01);
    box-shadow: 0 8px 24px rgba(120, 0, 255, 0.2);
    background: rgba(255, 255, 255, 0.05);
  }

  .table td {
    padding: 12px;
    vertical-align: middle;
  }

  /* ====== IMAGE ====== */
  .img-thumb {
    width: 120px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
    transition: 0.25s;
  }

  .img-thumb:hover {
    transform: scale(1.05);
    border-color: #ff00ff;
    box-shadow: 0 0 12px rgba(255, 0, 255, 0.4);
  }

  /* ====== PRICE BADGE ====== */
  .badge-price {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 999px;
    font-weight: 700;
    background: linear-gradient(90deg, #ff00ff, #ff9900);
    color: #0b0610;
    font-size: 0.9rem;
    box-shadow: 0 6px 18px rgba(255, 153, 0, 0.15);
  }

  /* ====== TEXT CUT ====== */
  .td-desc {
    max-width: 240px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: middle;
  }

  /* ====== ACTION BUTTONS ====== */
  .btn-edit,
  .btn-delete {
    border-radius: 8px;
    padding: 6px 12px;
    font-size: 0.85rem;
    transition: 0.25s ease;
    border: none;
  }

  .btn-edit {
    background: linear-gradient(90deg, #00d4ff, #0066ff);
    color: #fff;
  }

  .btn-edit:hover {
    box-shadow: 0 0 14px rgba(0, 150, 255, 0.4);
    transform: translateY(-2px);
  }

  .btn-delete {
    background: linear-gradient(90deg, #ff416c, #ff4b2b);
    color: #fff;
  }

  .btn-delete:hover {
    box-shadow: 0 0 14px rgba(255, 65, 108, 0.4);
    transform: translateY(-2px);
  }

  /* STACK ACTIONS VERTICALLY */
  .action-cell {
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: center;
    justify-content: center;
  }

  .action-cell .btn {
    width: 100%;
    max-width: 140px;
  }

  /* ====== RESPONSIVE ====== */
  @media (max-width: 768px) {
    .img-thumb {
      width: 80px;
      height: 60px;
    }

    .td-desc {
      max-width: 120px;
    }

    .table td,
    .table th {
      font-size: 13px;
      padding: 8px;
    }
  }
</style>

<div class="admin-list-card">
  <div class="admin-list-header">
    <h3 class="admin-list-title">📱 Danh sách sản phẩm</h3>
    <div class="d-flex gap-2 align-items-center">
      <a href="<?= BASE_URL . '?c=admin-product-add' ?>" class="btn btn-create">＋ Thêm sản phẩm</a>
      <a href="<?= BASE_URL . '?c=admin-dashboard' ?>" class="back-btn">⬅ Quay lại</a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table align-middle text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>Hình ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Hãng</th>
          <th>Giá</th>
          <th>Chip set</th>
          <th>Mô tả</th>
          <th>Màn hình</th>
          <th>Camera</th>
          <th>RAM</th>
          <th>Dung lượng</th>
          <th>Pin</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $p): ?>
          <tr>
            <td><?= $p['id'] ?></td>
            <td><img src="<?= $p['image'] ?>" alt="Ảnh" class="img-thumb"></td>
            <td><?= $p['name'] ?></td>
            <td><?= $p['cate_name'] ?></td>
            <td><span class="badge-price"><?= number_format($p['price'], 0, ',', '.') ?>₫</span></td>
            <td><?= $p['chipset'] ?></td>
            <td class="td-desc" title="<?= $p['description'] ?>"><?= $p['description'] ?></td>
            <td><?= $p['screen'] ?></td>
            <td><?= $p['camera'] ?></td>
            <td><?= $p['ram'] ?>GB</td>
            <td><?= $p['capacity'] ?>GB</td>
            <td><?= $p['battery'] ?>mAh</td>
            <td>
              <div class="action-cell">
                <a href="<?= BASE_URL ?>?c=admin-product-edit&id=<?= $p['id'] ?>" class="btn btn-edit">✏️ Sửa</a>
                <a href="<?= BASE_URL ?>?c=admin-product-delete&id=<?= $p['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" class="btn btn-delete">🗑️ Xóa</a>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>