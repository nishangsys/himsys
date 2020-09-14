<?php
if (!defined('IN_CB')) { die('You are not allowed to access to this page.'); }
?>

            <div class="output">
                <section class="output">
                    <?php
                        $finalRequest = '';
                        foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput">
						<?php
						$N=$ncode;
						for($i=0; $i < $N; $i++)
						{
						?>
                        <?php if ($imageKeys['text'] !== '') { ?><img style="margin: 0 20px 20px 0;" src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?>Fill the form to generate a barcode.<?php } }?>
                    </div>
                </section>
            </div>
        </form>
