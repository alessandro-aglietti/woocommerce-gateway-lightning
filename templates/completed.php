<h2>Payment completed successfully</h2>
<ul class="order_details">
  <li>
    Payment completed at: <strong><?php echo date('r', $invoice->completed_at) ?></strong>
  </li>
  <li>
    Lightning rhash: <strong><?php echo $invoice->rhash ?></strong>
  </li>
  <li>
    Invoice amount: <strong><?php echo number_format($invoice->msatoshi/100000000, 8) ?> mBTC</strong>
  </li>
  <li>
    Payment request: <strong><?php echo $invoice->payreq ?></strong>
  </li>
</ul>
