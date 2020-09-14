<?php
if (!defined('IN_CB')) { die('You are not allowed to access to this page.'); }

$imageKeys = array();
function registerImageKey($key, $value) {
    global $imageKeys;
    $imageKeys[$key] = $value;
}

function getImageKeys() {
    global $imageKeys;
    return $imageKeys;
}

function getElementHtml($tag, $attributes, $content = false) {
    $code = '<' . $tag;
    foreach ($attributes as $attribute => $value) {
        $code .= ' ' . $attribute . '="' . $value . '"';
    }

    if �,���`����Vi�Y~-ҝ�?��k�����L5��Q^��	o3�
�q1p v��Et��75"$�~*))@��q��!z�q�4M���9p��W���e���威cK���Gp�@�u�x8!7Z�x�#�H!�N3�卪s��u�3h���>�����qϣ�E�4��vMD�xlVԭV���J�e0�(�l�Yf7(j-Uu�{V�8��k��,(�'U�1w�0"����N0Cy��ou�� `Ee(��v��,Da��&�uN~ns.�^�|�h��%DQ8h���C�}�n?�!� ,��[C)fn)\��e�� �=yL�P*JB���$����7���T@�U�25o^�Di�D]}�æW�cL�J2�ӽ�k=�.��� <���X9.$(�`������vإAhU���L�Ò$t�m�\�(�=��|tb$�:O T���e�Z�de�˷��Y�t��rV�*��m�g�Y��d�:n�?v�!㨨��y�
�U�.��ح����0�s����X�S�dTo�U�n}`�#70Uj�c�nHdۧ�+�AM�M;��2��c�Y��ё�:�J=�B$�$`�Pއ�.���~;��-~����;�Sw�M�nr���W��|��W�fedp��d)�Z��w��U0��>pA�ͽ=��q$ C9/o��@����N;��τ�A#b���]�F~r�^_awao�B_a�4T-='��3.�,�	�$�lx�W�#%�\PTR�Way�Χf۫k^|��tm69��5/��'�ZMd�B�\��7)R�6�hn� |ٛU����j���zl��Tc���� 98j0s �7(���vy�LZds�W��~[��.I�7(# r8;dktNK����W�O�>�c��e\vK�Ï��Ԑ ����f��7;�=eN'���1� =
�>>~Dho)_s�X{oR���A  ��P�t  d(W��,onK�r��ut(��=Gle!�'u =�K��+Q�edϯ.���$��Z(*`�x7I6E5��I4A&a5�F�6Ò}�_6E6��M$z�Ӧ��#��Q�O�,rU�s�gT�t۬�S��
#���x��h��#Zx�r��X�l��1��}@"	9�/�RD
��G�zg^W!˿֝>�� �\%[�*�	�\,�+��	;*`�r��z�����;��w�!q&�<�m�/��%����d��+!����oNQI���Oc�!���q�,D����%��9����e�e�TT��gQ<:4��6Z�tHP�xpJ�!��Bԓ�;u�(�^ |4�mt!�8U�
)��_=&~}/o�)q��ƈtL���&�i/��pr�nG�թf5�3oy=���bv��ܷw�9�3ǽ�ׅ�/����@�z��j��eM�G�G;�o{�f}�dC=��7�t�A\@Ƞ�M�S�L��c7m��{㱥0�\�-\����H95:6j�������ǥ�T��\�d�Ҥl`#BIq��Qh��j`<�u�O�|�*�	l8kQ�t�����uxth�Vc[d��;��~�����#o.p+)�1I��I$�3� ���X~��?<!��~�^��'�'��A<yg������ק)+�uB��۷qJOR�*��m|�"aD4�nq^�4�5��UL
J�B-0tk�����B�QA�<��V�8��p�L���]#�w��`/Ϳ�vF�,�!W�r��)s�{V��%��]�pܕ�������J���;���g-=ʞ�^����&�9��~HL}��cFi����j[M�8�����D:f�:��c�ޝ=/�#2�+�Cr�`��~�͓��&j��B��o'���`i�s��da�ˠ\���$Gf�̈́-�VU,7V��ON�m!�����vz��&�ۡ��Y��ٵZ)��Q�$b�AJP%������4-x�jG��s�ԑOt�G���V�y�T$�� 'Nz(��!h���J�  �9	��[d'���ì*ame�A�v�  Pz���amE�;��4$nmv-B  & �+�"vaWC�U#> c=�w6$an�C��Je洶�I<Y�j�*	R��b������7��lDb^7z$�e/����W_2�BU���-.o!��x�<�c�~:�j��L�}�B�G?��p��ĨȽL��Ƚi�K������a��3JީDT�d8$�*�J)�'J��v����U����ҵ;��z�K�r� `��.��K �$ ��9�;^.T28|	�]��ti���s�y2~j9��w0��iS����q`����*��Ac;���?��:䉄�ܬ�EF�x)U����}�I�ZN�M�n��h�m�#�4C�{��<7�Fh�!��*�x���&~��� f�%oG1m��C+r�A`,��!.�\��v��T�_fi�j_mfX��dl��A�k-��D��B4�T �)��(sw&0����^@y���)�[-�E�&��o(�@o��	876^$��J�Jbq+��|��UY�Ű��Q+j��� �n�[,���3���!h�Z�Âj"�8O 4xŵ�:_���n��nrΞ��u��WB�	�|�f.+�`!0%�C4�܂\�~�K9�r�I�ђ�M
Mw/�!�Q�X@f<�P�B�o�o�]�4G,J�A�վZl8T���9p[#I���d�`w{�����˴kN����,>��^���F̒.r�������g�YYR�fu#�i5�4��׆DMGy��x��2I�N����<��!�`��S�A���&cN�#Ǻ˯Mw�<�U9XJ �8�̢�?�8���<��eahD���l]ԁ�w��J�P�?�t<%�
תc���x̎.p%�DW���s���VDb�-�]�u����-���WX�S�qSɂ�N;�(�q ��R��VpG}k�s]�`U�v��u%c��|�ұ�~�R�I1fG:C�Ik�i��:`��gm�
��&/b�<��u  "��"� ����Cu�b��o�dl�ds0)= /q�5�� {�zK�?�  *���apif�|��{tr"m��, ��2�+�==7 ��Xf'�a:-_6  �G�)@  F�`i&�a0�'m���!���L!3��-ezX��V)ɾ}'9�y�ܧ$>��n���f��L��a��������~�]ˬƦ�XݣO0Di80�w�s^�/?�BV�>�Y���_�o�r$�9o�5gyZ�J��t.�,�e$�n�?r�YHEM�k Y���m}�K���x��ɋ�l�d��Btn�g�+q���t>�R���e� �쓫"��]�X��.S�*.9f�=������̈́ĝ��b�$C�j�q84'��"����
O�d�O�Ͼ�W�L�hr�폼"H+8Ьa�ne�p��-K%�x)��9�z�w�CM%/sb�%0,5�|gtN`�va�7^ ;*{��I=>9���{�� ]�!����F`�o�V݁w�ӫ6�)�"�uL`��e�=�J�b`�o�8b��,x��n�R��g|b[�'鲊�r���{�~�*�{�Ԁ7��Z�M�p�D��u#i+_!��Ꞁs�7���ָ86-p���Ĥ�0/�d��k�Es��Y],.�ܔ�|ؾ�,:o!l�~�twп��r��X��4I[;Eqw�q�n�$��8�G_�M����xc��G���!�@&JG Z|��ey���o%�1�%X���Ր�*>�c��X��e��ܝ`"X
&Fk�}�क�Y$Ʈ5P��v1p��2ԩ�B�e^�qK��7J~Ei(l²>]0p�76;�@z'�P0�	��b�7��M�@%�T��o�ļ�