<?php

/**
 * ECSHOP ���b������Ʒ���
 * ============================================================================
 * ������� 2005-2011 �Ϻ����ɾW�j�Ƽ����޹�˾���K�������Й�����
 * �Wվ��ַ: http://www.ecshop.com��
 * ----------------------------------------------------------------------------
 * �@����Ҽ������ܛ������ֻ���ڲ�����̘IĿ�ĵ�ǰ����������a�M���޸ĺ�
 * ʹ�ã������S��������a���κ���ʽ�κ�Ŀ�ĵ��ٰl����
 * ============================================================================
 * $Author: liubo $
 * $Id: inc_goods_type_zh_tw.php 17217 2011-01-19 06:29:08Z liubo $
*/

$attributes['book'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '������', 0, 0, '', 0),
                                (NULL, {cat_id}, '�D����̖/ISBN', 0, 0, '', 0),
                                (NULL, {cat_id}, '��������', 0, 0, '', 0),
                                (NULL, {cat_id}, '�_��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�D��퓔�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�D���bӆ', 1, 0, 'ƽ�b\r\n�ڰ�', 0),
                                (NULL, {cat_id}, '�D��Ҏ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ӡ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�֔�', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ٷ��', 0, 0, '', 0)",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '��', 1);");

$attributes['music'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '����Ƭ��', 0, 0, '', 0),
                                (NULL, {cat_id}, 'Ӣ��Ƭ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ʒ�e��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���|/��ʽ', 1, 0, 'HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD\r\nCD\r\nTAPE\r\nLP', 0),
                                (NULL, {cat_id}, 'Ƭ�b��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ҵ؅^', 0, 0, '', 0),
                                (NULL, {cat_id}, '�Z�N', 1, 0, '����\r\nӢ��\r\n����\r\n��������', 0),
                                (NULL, {cat_id}, '����/ָ�]', 0, 0, '', 0),
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '����e', 1, 0, '�ŵ�\r\n����\r\n�u�L\r\n�l��\r\n���{\r\n��ʿ\r\n�{�{\r\n���\r\n����\r\n����\r\n����\r\n���f\r\n����\r\n��\r\n�ϳ�\r\n�l��\r\nԇ��\r\n��ͯ\r\n̥��\r\n�p����\r\n��������\r\n�c������\r\nӰҕ����\r\n�����o����\r\n����Ȼ����', 0),
                                (NULL, {cat_id}, '�L��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���~', 1, 0, '��\r\n�o', 0),
                                (NULL, {cat_id}, '��Ƭ���a', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISRC�a', 0, 0, '', 0),
                                (NULL, {cat_id}, '�l�й�˾', 0, 0, '', 0),
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '����̖', 0, 0, '', 0),
                                (NULL, {cat_id}, '���M̖', 0, 0, '', 0),
                                (NULL, {cat_id}, '���̖', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '����', 1);");

$attributes['movie'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '����Ƭ��', 0, 0, '', 0),
                                (NULL, {cat_id}, 'Ӣ��Ƭ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ʒ�e��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���|/��ʽ', 1, 0, 'HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD', 0),
                                (NULL, {cat_id}, '��Ƭ���', 1, 0, '����\r\n�p��', 0),
                                (NULL, {cat_id}, 'Ƭ�b��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ҵ؅^', 0, 0, '', 0),
                                (NULL, {cat_id}, '�Z�N/����', 1, 0, '����\r\nӢ��\r\n����\r\n��������', 0),
                                (NULL, {cat_id}, '��Ļ', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ɫ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '������Ļ', 1, 0, '��\r\n�o', 0),
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '������', 0, 0, '', 0),
                                (NULL, {cat_id}, '����e', 1, 0, '����\r\nż��\r\n����\r\n���\r\n�ƻ�\r\n��Ԓ\r\n��b\r\n����\r\n�@�U\r\n�ֲ�\r\n����\r\n����\r\n��̽\r\n����\r\n�vʷ\r\n܊��\r\n��\r\n���_\r\n����\r\n����\r\nϲ��\r\n�龰\r\n����\r\n��ͨ\r\n��ͯ\r\n��������', 0),
                                (NULL, {cat_id}, '���', 0, 0, '', 0),
                                (NULL, {cat_id}, '���l��ʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�^�a', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ƭ���a', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISRC�a', 0, 0, '', 0),
                                (NULL, {cat_id}, '�l�й�˾', 0, 0, '', 0),
                                (NULL, {cat_id}, '���� ', 0, 0, '', 0),
                                (NULL, {cat_id}, '����̖', 0, 0, '', 0),
                                (NULL, {cat_id}, '���M̖', 0, 0, '', 0),
                                (NULL, {cat_id}, '���̖', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '�Ӱ', 1);");

$attributes['mobile'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '�W�j��ʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '֧���l��/�W�j�l��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ߴ��w�e', 1, 0, '   ', 0),
                                (NULL, {cat_id}, '���^��ʽ/�֙C���', 1, 0, '���w\r\n���w\r\nֱ��\r\n�ۯB\r\n�֌�', 0),
                                (NULL, {cat_id}, '��������/��������', 0, 0, '', 0),
                                (NULL, {cat_id}, '��������/��������', 0, 0, '', 0),
                                (NULL, {cat_id}, '������', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ɫ��/�Ҷ�', 1, 0, '   ', 0),
                                (NULL, {cat_id}, '�L��', 0, 0, '', 0),
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '���', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ļ���|', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ȴ�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '����ϵ�y', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ͨԒ�r�g', 0, 0, '', 0),
                                (NULL, {cat_id}, '���C�r�g', 0, 0, '', 0),
                                (NULL, {cat_id}, '�˜�����', 0, 0, '', 0),
                                (NULL, {cat_id}, 'WAP�ϾW', 0, 0, '', 0),
                                (NULL, {cat_id}, '�����I��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�쾀λ��', 1, 0, '����\r\n����', 0),
                                (NULL, {cat_id}, '�S�C���', 0, 0, '', 0),
                                (NULL, {cat_id}, '�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�z���^', 0, 0, '', 0),
                                (NULL, {cat_id}, '����/��e', 1, 0, '֧��\r\n��֧��', 0),
                                (NULL, {cat_id}, '�t��/�{��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�r��ȼ�', 1, 0, '�߃r�C\r\n�Ѓr�C\r\n�̓r�C', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '�֙C', 1);");

$attributes['notebook'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '��̖', 0, 0, '', 0),
                                (NULL, {cat_id}, 'Ԕ��Ҏ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�Pӛ���ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '̎�������', 0, 0, '', 0),
                                (NULL, {cat_id}, '̎����������l', 0, 0, '', 0),
                                (NULL, {cat_id}, '��������', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ϵ�y����', 0, 0, '', 0),
                                (NULL, {cat_id}, '����оƬ�M', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ȴ�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ȴ����', 0, 0, '', 0),
                                (NULL, {cat_id}, 'Ӳ�P', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ļ�ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@ʾоƬ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�˷Q�l��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@���@��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '������', 0, 0, '', 0),
                                (NULL, {cat_id}, '늳�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '��������', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '�Pӛ����X', 1);");

$attributes['dc'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '���', 0, 0, '', 0),
                                (NULL, {cat_id}, '�������/������  ', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ч����', 1, 0, '  ', 0),
                                (NULL, {cat_id}, '��W׃������', 0, 0, '', 0),
                                (NULL, {cat_id}, '����׃������', 0, 0, '', 0),
                                (NULL, {cat_id}, '����ģʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@ʾ�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@ʾ���ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�й�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�й������ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '��߷ֱ���', 0, 0, '', 0),
                                (NULL, {cat_id}, '�D��ֱ���', 0, 0, '', 0),
                                (NULL, {cat_id}, '���������', 0, 0, '', 0),
                                (NULL, {cat_id}, '�������ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�R�^', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ȧ', 0, 0, '', 0),
                                (NULL, {cat_id}, '����', 0, 0, '', 0),
                                (NULL, {cat_id}, '���DҺ����', 1, 0, '֧��\r\n��֧��', 0),
                                (NULL, {cat_id}, '�惦���|', 0, 0, '', 0),
                                (NULL, {cat_id}, '�惦��', 1, 0, '  ӛ�ý�w\r\n�惦������', 0),
                                (NULL, {cat_id}, 'Ӱ���ʽ', 1, 0, '    �o��\r\n�Ӯ�', 0),
                                (NULL, {cat_id}, '�ع����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ع�ģʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ع��a��', 0, 0, '', 0),
                                (NULL, {cat_id}, '��ƽ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�B��', 0, 0, '', 0),
                                (NULL, {cat_id}, '���T�ٶ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�W���', 1, 0, '����\r\n����', 0),
                                (NULL, {cat_id}, '�Ĕz����', 1, 0, '  ', 0),
                                (NULL, {cat_id}, '���Ķ��r��', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISO�й��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�y��ģʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '����ģʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ƭ�Ĕz', 0, 0, '', 0),
                                (NULL, {cat_id}, '��ӽӿ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�Դ', 0, 0, '', 0),
                                (NULL, {cat_id}, '늳�ʹ�Õr�g', 0, 0, '', 0),
                                (NULL, {cat_id}, '���γߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '����ܛ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�˜����', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ݲ���ϵ�y', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '���a���C', 1);");

$attributes['dv'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '��̖', 0, 0, '', 0),
                                (NULL, {cat_id}, '���', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ͳߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '������ؔ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '��W׃������', 0, 0, '', 0),
                                (NULL, {cat_id}, '����׃������', 0, 0, '', 0),
                                (NULL, {cat_id}, '�@ʾ���ߴ缰���', 0, 0, '', 0),
                                (NULL, {cat_id}, '�й�����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�й������ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�й���������', 0, 0, '', 0),
                                (NULL, {cat_id}, '���ع���', 0, 0, '', 0),
                                (NULL, {cat_id}, '����������', 0, 0, '', 0),
                                (NULL, {cat_id}, '�������ߴ�', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ˮƽ������', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ȡ����', 0, 0, '', 0),
                                (NULL, {cat_id}, '���aЧ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�R�^����', 0, 0, '', 0),
                                (NULL, {cat_id}, '������ʽ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�ع����', 0, 0, '', 0),
                                (NULL, {cat_id}, '�����ӿ�', 0, 0, '', 0),
                                (NULL, {cat_id}, '�S�C�惦', 0, 0, '', 0),
                                (NULL, {cat_id}, '늳����', 0, 0, '', 0),
                                (NULL, {cat_id}, '늳ع�늕r�g', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '���a�z��C', 1);");

$attributes['cosmetics'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '�a��', 0, 0, '', 0),
                                (NULL, {cat_id}, '�aƷҎ��/����', 0, 0, '', 0),
                                (NULL, {cat_id}, '��Ҫԭ��', 0, 0, '', 0),
                                (NULL, {cat_id}, '����e', 1, 0, '�ʊy\r\n���y����\r\n�o�wƷ\r\n��ˮ', 0),
                                (NULL, {cat_id}, 'ʹ�ò�λ', 0, 0, '', 0),
                                (NULL, {cat_id}, '�m���w�|', 1, 0, '����\r\n����\r\n����', 0),
                                (NULL, {cat_id}, '�m����Ⱥ', 1, 0, 'Ů��\r\n����', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '���yƷ', 1);");

$attributes['mobile2'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `attr_index`, `sort_order`, `is_linked`, `attr_group`) VALUES
                                (NULL, {cat_id}, '��������', 1, 0, '2008��01��\r\n2008��02��\r\n2008��03��\r\n2008��04��\r\n2008��05��\r\n2008��06��\r\n2008��07��\r\n2008��08��\r\n2008��09��\r\n2008��10��\r\n2008��11��\r\n2008��12��\r\n2007��01��\r\n2007��02��\r\n2007��03��\r\n2007��04��\r\n2007��05��\r\n2007��06��\r\n2007��07��\r\n2007��08��\r\n2007��09��\r\n2007��10��\r\n2007��11��\r\n2007��12��', 1, 0, 0, 0),
                                (NULL, {cat_id}, '�֙C��ʽ', 1, 0, 'GSM,850,900,1800,1900\r\nGSM,900,1800,1900,2100\r\nCDMA\r\n�pģ��GSM,900,1800,CDMA 1X��\r\n3G(GSM,900,1800,1900,TD-SCDMA )', 1, 1, 1, 0),
                                (NULL, {cat_id}, '��ՓͨԒ�r�g', 0, 0, '', 0, 2, 0, 0),
                                (NULL, {cat_id}, '��Փ���C�r�g', 0, 0, '', 0, 3, 0, 0),
                                (NULL, {cat_id}, '�', 0, 0, '', 0, 4, 0, 0),
                                (NULL, {cat_id}, '���ʽ', 0, 0, '', 0, 5, 0, 0),
                                (NULL, {cat_id}, '���^��ʽ', 1, 0, '���w\r\n���w\r\nֱ��\r\n�ۯB', 1, 6, 1, 0),
                                (NULL, {cat_id}, '���Ķ���Ϣ', 0, 0, '', 0, 7, 0, 0),
                                (NULL, {cat_id}, '�惦����ʽ', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '�ȴ�����', 0, 0, '', 2, 0, 0, 0),
                                (NULL, {cat_id}, '����ϵ�y', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, 'K-JAVA', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '�ߴ��w�e', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '�ɫ', 1, 1, '��ɫ\r\n��ɫ\r\n�{ɫ\r\n��ɫ\r\n��ɫ\r\n�yɫ\r\n��ɫ\r\n����ɫ\r\n�ڼtɫ\r\n���{ɫ\r\n����ɫ', 1, 0, 0, 0),
                                (NULL, {cat_id}, '��Ļ�ɫ', 1, 0, '1600�f\r\n262144�f', 1, 0, 1, 1),
                                (NULL, {cat_id}, '��Ļ���|', 1, 0, 'TFT', 0, 0, 0, 1),
                                (NULL, {cat_id}, '��Ļ�ֱ���', 1, 0, '320��240 ����\r\n240��400 ����\r\n240��320 ����\r\n176x220 ����', 1, 0, 0, 1),
                                (NULL, {cat_id}, '��Ļ��С', 0, 0, '', 0, 0, 0, 1),
                                (NULL, {cat_id}, '����ݔ�뷨', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '�龰ģʽ', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '�W�j朽�', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '�{���ӿ�', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '�������ӿ�', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '����]��', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '�[�', 0, 0, '', 0, 35, 0, 4),
                                (NULL, {cat_id}, '�k������', 0, 0, '', 0, 0, 0, 4),
                                (NULL, {cat_id}, '���a���C', 0, 0, '', 1, 0, 0, 3),
                                (NULL, {cat_id}, '����', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '������', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '׃��ģʽ', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'ҕ�l�Ĕz', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'MP3������', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'ҕ�l����', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'CPU�l��', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '�����C', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '���C�ӿ�', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '�W���', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '�g�[��', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '���', 1, 2, '���ض��C\r\n�{�����C\r\n������', 0, 0, 0, 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '��Ʒ�֙C', 1);");

?>