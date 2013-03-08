Magento module adding new shipping method - UPS Mail Innovations.
stared buildin by: https://github.com/tomfordrumm

In development!

######Deprecated!########
Installation:

Add to /app/design/frontend/base/default/template/shipping/tracking/popup.phtml

167    <?php else: ?>
168        <p><?php echo $this->__('There is no tracking available for this shipment.'); ?></p>
169    <?php endif; ?>
    <?php if($shipid == 0): ?>
            <?php $info_tmp = Mage::registry('current_shipping_info')->getTrackingInfo(); ?>
            <?php $info = explode('"',$info_tmp[0][0]) ?>
            <span>Click for this link, to look tracking information:</span>
        <a href="http://www.packagetrackr.com/track/mailinnovations/<?php echo $info[1] ?>"><?php echo $info[1] ?></a>
    <?php endif; ?>
176<?php endforeach; ?>
177<?php else: ?>
178    <p><?php echo $this->__('There is no tracking available.'); ?></p>
179<?php endif; ?>
#########################
